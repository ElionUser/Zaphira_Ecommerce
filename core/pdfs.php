<?php

    require_once './vendor/autoload.php';
    require_once './core/time.php'; 

    use Dompdf\Dompdf;

    class pdfs {

        public $path;
        public $compact;
        public $PdfInstance;
        public $folder;
        public $filename;

        public function __construct($path,$out,$compact,$folder) {

            $this->path = $path;
            $this->compact = $compact;
            $this->out = $out;
            $this->folder = $folder;

            ob_start();
            $this->loadFile($this->path);
            $this->DOMPdf();
            $this->OUTput();
        }

        

        public function loadFile($path) {

            include './view/pdf/'.$path;
        }

        public function DOMPdf() {

            $this->PdfInstance = new Dompdf();
            $this->PdfInstance->loadHtml(ob_get_clean());
            $this->PdfInstance->setPaper('letter', 'portrait'); //portrait or landscape
            $this->PdfInstance->render();
        }

        public function OUTput() {

            switch($this->out) {

                case 'save':
                    $time = new time();
                    $output = $this->PdfInstance->output();
                    $this->filename = 'file_'.$time->fileTime().'.pdf';
                    $path = helper::storagePdfs(false).'/'.$this->folder.'/'.$this->filename;
                    file_put_contents($path,$output);
                    break;

                case 'stream';
                    $this->PdfInstance->stream('file.pdf',array('Attachment'=> false));
                    break;

            }
        }
    }