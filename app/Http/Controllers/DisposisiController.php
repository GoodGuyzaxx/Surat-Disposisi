<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;
use PhpOffice\PhpWord\TemplateProcessor;

class DisposisiController extends Controller
{
    public function word(Request $request){
        $domPdfPath = base_path('vendor/dompdf/dompdf');
        \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');

        $suratdari = $request->suratdari;
        $nosuratdari = $request->nosuratdari;
        $perihalsuratdari = $request->perihalsuratdari;
        $tanggalsuratdari = $request->tanggalsuratdari;

        $tanggalsurat = $request->tanggalsurat;
        $nobuku = $request->nobuku;
        $nosurat = $request->nosurat;

        $perihal = $request->perihalsuratmasuk;



        // Creating the new document...
        $phpWord = new TemplateProcessor("mydoc.docx");

        $phpWord->setValues([
            'suratdari' => $suratdari,
            'nosuratdari' => $nosuratdari,
            'perihalsuratdari' => $perihalsuratdari,
            'tanggalsuratdari' => $tanggalsuratdari,
            'tanggalsurat' => $tanggalsurat,
            'nobuku' => $nobuku,
            'nosurat' => $nosurat,
            'perihalsuratmasuk' => $perihal,
        ]);

        $dateFormate = Carbon::now()->format('d-m-Y');
        $fileName = "Dispo-".$perihalsuratdari."-".$dateFormate.".docx";
        $wordSavePath = storage_path('app/public/disposisi/'.$fileName);
        $phpWord->saveAs($wordSavePath);


        $getHasil = IOFactory::load(storage_path('app/public/disposisi/'.$fileName));

        $fileNamePDF = "Dispo-".$perihalsuratdari."-".$dateFormate.".pdf";

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($getHasil, 'PDF');
        $pdfPath = storage_path('app/public/disposisi/'.$fileNamePDF);
        $objWriter->save($pdfPath);

//        if (file_exists($pdfPath)) {
//            $fileExists = true;
//        } else {
//            $fileExists = false;
//        }

        $fileUrlPDF = 'storage/disposisi/'.$fileNamePDF;
        $fileUrlWord = 'storage/disposisi/'.$fileName;
        return view('pages.review.data',[
            'fileUrlPDF' => $fileUrlPDF,
            'fileUrlWord' => $fileUrlWord,
        ]);
    }

}
