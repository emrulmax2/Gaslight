<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileRecord;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
       
        if ($request->hasFile('file')) {
            
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
           
                
            $filePath = $file->storeAs('companies/'.$request->pid.'/images', $filename, 'public');
            
            // Save file metadata to the database
            
            $fileRecord = FileRecord::create([
                'name' => $filename,
                'original_name' => $file->getClientOriginalName(),
                'path' => $filePath,
                'mime_type' => $file->getClientMimeType(),
                'size' => $file->getSize(),
            ]);

            
            $fileUrl = Storage::disk('public')->temporaryUrl('companies/'.$request->pid.'/images/'.$filename, now()->addMinutes(15));
            return response()->json([
                'success' => $filename, 
                'filePath' => $fileUrl,
                'fileRecord' => $fileRecord,
                'id' => $fileRecord->id
            ]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);

        
    }


    public function delete(Request $request,$id)
    {
        
        if($id){
            $fileRecord = FileRecord::find($id);

            if (!$fileRecord) {
                return response()->json(['error' => 'File not found'], 404);
            }

            if ($fileRecord) {
                $filePath = $fileRecord->path;

                if (Storage::disk('public')->exists($filePath)) {

                    Storage::disk('public')->delete($filePath);

                    $fileRecord->delete();
    
                    return response()->json(['success' => true]);
                }
            }
        } else if($request->has('filename')){
            $filename = $request->filename;
            $fileRecord = FileRecord::where('name', $filename)->first();
    
            if ($fileRecord) {
                $filePath = $fileRecord->path;
    
                if (Storage::disk('public')->exists($filePath)) {
                    
                    Storage::disk('public')->delete($filePath);
                    $fileRecord->delete();
    
                    return response()->json(['success' => true]);
                }
            }
        } else {
            return response()->json(['error' => 'File not found'], 404);
        }
    }
}
