
(function () {
    "use strict";

    // // Show modal
    // $("#dashboard-show-modal").on("click", function () {
    //     const el = document.querySelector("#dashboard-firstlogin-preview");
    //     const modal = tailwind.Modal.getOrCreateInstance(el);
    //     modal.show();
    // });
    // Show modal on page load
    
 
        const el = document.querySelector("#dashboard-firstlogin-preview");
        const sc = document.querySelector("#successModal");
        const modal = tailwind.Modal.getOrCreateInstance(el);
        const successModal = tailwind.Modal.getOrCreateInstance(sc);
        modal.show();
        async function step1() {
            // Reset state
            $('#step1-form').find('.step1__input').removeClass('border-danger')
            $('#step1-form').find('.step1__input-error').html('')

            // Create FormData object
            let formData = new FormData(document.getElementById('step1-form'));

            $('.step1-text').addClass('hidden');
            $('#btn-step1 .step1__loading').removeClass('hidden');
            // Loading state
            await helper.delay(1500)

            axios.post(route('company.store'), formData)
                .then(res => {
                    // Show Toastify message
                    $("#step1-success").removeClass('hidden');
                    $('current-step').html('02');
                    // Redirect to login after a short delay
                    modal.hide();
                    successModal.show();
                    setTimeout(() => {
                        successModal.hide();
                        location.reload();
                    }, 2000);
                })
                .catch(err => {
                    $('#btn-step1 .step1__loading').addClass('hidden');
                    $('.step1-text').removeClass('hidden');
                    if (err.response && err.response.data.errors) {
                        for (const [key, val] of Object.entries(err.response.data.errors)) {
                            $(`#${key}`).addClass('border-danger')
                            $(`#error-${key}`).html(val)
                        }
                    } else if (err.response && err.response.data.error) {
                        Toastify({
                            text: err.response.data.error,
                            duration: 3000,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            backgroundColor: "#FF0000",
                        }).showToast();
                    }
                });
            
        }

    $('#btn-step1').on('click', function () {
        step1();
        
    });

    var uploadedFiles = JSON.parse(localStorage.getItem("uploadedFiles")) || [];
    // Display the uploaded file
    var myDropzone = new Dropzone("#myDropzone", {
        url: route("file.upload"),
        maxFilesize: 5, // MB
        acceptedFiles: "image/*",
        addRemoveLinks: true,
        success: function (file, response) {
            let fileId = response.id;
            let filePath = response.filePath;
            

            // Save the file path and ID to local storage
            uploadedFiles.push({ filePath: filePath, id: fileId });
            localStorage.setItem(
                "uploadedFiles",
                JSON.stringify(uploadedFiles)
            );
            //  Display the uploaded file
            displayUploadedFile(filePath, fileId, file);
        },
        complete: function (file) {
            console.log(file);
            //implode the array of local storage
            uploadedFiles = JSON.parse(localStorage.getItem("uploadedFiles"));
            // Set the value of the input field to the uploaded files
            $.each(uploadedFiles, function (index, value) {
                // check if the first index input field is empty
                if ($("input[name='company_logo']").eq(0).val() == "") {
                    $("input[name='company_logo']").eq(0).val(value.filePath);
                }
            });
            
        },
        error: function (file, response) {
            // Handle the error response from the server
            console.error(response);
            // Display the error message to the user
            let errorMessage =
                typeof response === "string" ? response : response.message;

            $(".warningModalTitle").text("Error");
            $(".warningModalDesc").text(errorMessage);
            warningModal.show();
        },
    });

    // Function to display uploaded file
    function displayUploadedFile(filePath, fileId, dropzoneFile) {

        // // Create the preview container
        // let previewContainer = document.getElementById("featuer-view");
        // // Clear the preview container
        // previewContainer.innerHTML = "";
        // // Create the image box
        // let imageBox = document.createElement("div");
        // // Add classes to the image box
        // imageBox.classList.add(
        //     "show-feature-image",
        //     "image-fit",
        //     "zoom-in",
        //     "relative",
        //     "mb-5",
        //     "mr-5",
        //     "h-80",
        //     "w-full",
        //     "cursor-pointer"
        // );
        // // Set the data-id attribute
        // imageBox.setAttribute("data-id", fileId);
        // // Append the image to the image box
        // previewContainer.appendChild(imageBox);
        // //End of preview container


        // Create the image element
        let imgElement = document.createElement("img");
        // Create the remove button
        let removeElement = document.createElement("div");
        removeElement.classList.add(
            "tooltip",
            "cursor-pointer",
            "absolute",
            "right-0",
            "top-0",
            "-mr-2",
            "-mt-2",
            "flex",
            "h-5",
            "w-5",
            "items-center",
            "justify-center",
            "rounded-full",
            "bg-danger",
            "text-white",
            "absolute",
            "right-0",
            "top-0",
            "-mr-2",
            "-mt-2",
            "flex",
            "h-5",
            "w-5",
            "items-center",
            "justify-center",
            "rounded-full",
            "bg-danger",
            "text-white"
        );
        // Create the icon element
        let icon = "<i data-lucide='x' class='w-4 h-4'></i>";
        // Append the icon to the removeElement
        removeElement.innerHTML = icon;
        imgElement.src = filePath; // Assuming the server returns the file path
        imgElement.classList.add("rounded-md");
        // Append the image and remove button to the image box
        //imageBox.appendChild(imgElement);
        //imageBox.appendChild(removeElement);
        //End of preview container

        // Create the uploaded image box list
        let uploadedContainer = document.getElementById("uploaded-view");
        let uploadedImageBox = document.createElement("div");
        uploadedImageBox.classList.add(
            "set-feature-image",
            "image-fit",
            "zoom-in",
            "relative",
            "mb-5",
            "mr-1",
            "md:mr-5",
            "h-24",
            "w-24",
            "cursor-pointer"
        );
        uploadedContainer.classList.remove("hidden");
        let tumbnailElement = document.createElement("img");
        tumbnailElement.src = filePath; // Assuming the server returns the file path
        let removeElement2 = document.createElement("div");
        removeElement2.classList.add(
            "delete-image",
            "tooltip",
            "cursor-pointer",
            "absolute",
            "right-0",
            "top-0",
            "-mr-2",
            "-mt-2",
            "flex",
            "h-5",
            "w-5",
            "items-center",
            "justify-center",
            "rounded-full",
            "bg-danger",
            "text-white",
            "absolute",
            "right-0",
            "top-0",
            "-mr-2",
            "-mt-2",
            "flex",
            "h-5",
            "w-5",
            "items-center",
            "justify-center",
            "rounded-full",
            "bg-danger",
            "text-white"
        );
        let icon2 = "<i data-lucide='x' class='w-4 h-4'></i>";
        // Append the icon to the removeElement
        removeElement2.innerHTML = icon2;

        uploadedImageBox.setAttribute("data-id", fileId);
        uploadedImageBox.appendChild(tumbnailElement);
        uploadedImageBox.appendChild(removeElement2);
        uploadedContainer.appendChild(uploadedImageBox);
        //End of uploaded container

        // Add event listener to the delete button
        removeElement.addEventListener("click", function () {
            // Remove the image from the DOM
            uploadedContainer.removeChild(uploadedImageBox);
            previewContainer.removeChild(imageBox);
            if (dropzoneFile) {
                myDropzone.removeFile(dropzoneFile);
            }
            // Send a request to the server to delete the file
            axios
                .delete(`/file-delete/${fileId}`, {
                    headers: {
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                })
                .then((response) => {
                    if (response.data.success) {
                        console.log("File deleted successfully");
                        document.getElementById("myDropzone").classList.remove("hidden");
                        document.getElementById("uploaded-view").classList.add("hidden");
                    } else {
                        console.error("Failed to delete file");
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                });
        });
        removeElement2.addEventListener("click", function () {
            // Remove the image from the DOM
            uploadedContainer.removeChild(uploadedImageBox);
            previewContainer.removeChild(imageBox);
            if (dropzoneFile) {
                myDropzone.removeFile(dropzoneFile);
            }
            // Send a request to the server to delete the file
            axios
                .delete(`/file-delete/${fileId}`, {
                    headers: {
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                })
                .then((response) => {
                    if (response.data.success) {
                        console.log("File deleted successfully");
                        document.getElementById("myDropzone").classList.remove("hidden");
                        document.getElementById("uploaded-view").classList.add("hidden");
                    } else {
                        console.error("Failed to delete file");
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                });
        });
        // Add event listener to the featured Image
        uploadedImageBox.addEventListener("dblclick", function (e) {
            // Remove the image from the DOM
            $("input[name='feature_image_id']").val(this.dataset.id);
            previewContainer.innerHTML = "";
            // Create the image box
            let newImageBox = document.createElement("div");
            // Add classes to the image box
            newImageBox.classList.add(
                "show-feature-image",
                "image-fit",
                "zoom-in",
                "relative",
                "mb-5",
                "mr-5",
                "h-80",
                "w-full",
                "cursor-pointer"
            );
            // Set the data-id attribute
            newImageBox.setAttribute("data-id", this.dataset.id);
            // Append the image to the image box
            previewContainer.appendChild(newImageBox);
            // Create the image element
            let newImgElement = document.createElement("img");
            // Create the remove button
            let newRemoveElement = document.createElement("div");
            newRemoveElement.classList.add(
                "tooltip",
                "cursor-pointer",
                "absolute",
                "right-0",
                "top-0",
                "-mr-2",
                "-mt-2",
                "flex",
                "h-5",
                "w-5",
                "items-center",
                "justify-center",
                "rounded-full",
                "bg-danger",
                "text-white",
                "absolute",
                "right-0",
                "top-0",
                "-mr-2",
                "-mt-2",
                "flex",
                "h-5",
                "w-5",
                "items-center",
                "justify-center",
                "rounded-full",
                "bg-danger",
                "text-white"
            );
            // Create the icon element
            let icon = "<i data-lucide='x' class='w-4 h-4'></i>";
            // Append the icon to the removeElement
            newRemoveElement.innerHTML = icon;
            newImgElement.src = this.querySelector("img").src; // Assuming the server returns the file path
            newImgElement.classList.add("rounded-md");
            // Append the image and remove button to the image box
            newImageBox.appendChild(newImgElement);
            newImageBox.appendChild(newRemoveElement);
            //End of preview container
            createIcons({ icons });

            //fade out #myDropzone


        });

        createIcons({ icons });
    }
    // Function to handle the display of company_register_no based on company_type value
    function handleCompanyTypeChange() {
        const companyType = document.querySelector('input[name="business_type"]:checked').value;
        const companyRegisterNo = document.getElementById("company_register_no");

        if (companyType === "Company") {
            companyRegisterNo.style.display = "flex";
        } else {
            companyRegisterNo.style.display = "none";
        }
    }

    // Add event listener to company_type radio buttons
    document.querySelectorAll('input[name="business_type"]').forEach((radio) => {
        radio.addEventListener("click", handleCompanyTypeChange);
    });

    // Initial check on page load
    handleCompanyTypeChange();
})();
