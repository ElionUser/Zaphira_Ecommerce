<?php 



    require_once 'model/ORM/orm.php';
    require_once 'model/ORM/tenacy.php';
    // require_once 'core/resources.php';
    require_once 'libs/phpspreadsheet/vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    class movieController extends Tenacy 
    {

        public function test()
        {
            // var_dump(Tenacy::test('test'));
            // var_dump(Tenacy::test('test'));
            
            

            // var_dump(Tenacy::all('categories'));

            

            // $categories = ORM::all('categories')->get();

            // $users = ORM::all('users')->get();
            
            // foreach($products as $product)
            // {
            //     $arrayData[] = [$product['name'] ,$product['id']];
            // }

            // var_dump($categories);

            // $arrayData = [
            //     [NULL, 2010, 2011, 2012],
            //     ['Q1',   12,   15,   21],
            //     ['Q2',   56,   73,   86],
            //     ['Q3',   52,   61,   69],
            //     ['Q4',   30,   32,    0],
            // ];


            // $excel = new Spreadsheet();
            // $sheet = $excel->getActiveSheet();
            // // $sheet->setCellValue('A1', 'Hello World !');
            // $sheet->fromArray($arrayData,NULL,'C3');

            // $writer = new Xlsx($excel);
            // $writer->save('hello world.xlsx');

            // Resources::show('home',['products' => $products]);
        }

        public function api()
        {
            $products = ORM::all('products')->get();

            echo json_encode($products);
        }

        public function Details($id)
        {
            echo $id;
        }

        public function Movies()
        {
            $products = ORM::all('products')->get();
            
            resources::show('movies');
        }
    }
?>