<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Session;

class InvoiceExport implements FromCollection,WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $invoice;

    

    public function __construct($invoice)
    {
        
        $this->invoice = $invoice;
        
    }

    public function collection()
    {
       
          
        foreach($this->invoice as $in){
            
            if($in->print_invoice=="बाजार"){
                
                  $in->office_hamali = 0;
                 $in->kata_hamali =  $in->office_charge;
            } else {
                $in->office_hamali = $in->office_charge;
                 $in->kata_hamali = 0;
            }
        }
        
    
        return $this->invoice;
    }

    public function map($invoice): array
    {
        
        return [
        $invoice['id'],
        $invoice->receipt_number,
        $invoice->print_invoice,
        $invoice->lorry_number,
        $invoice->lorry_charge,
        $invoice->material_sender,
         $invoice->material_receiver,
         $invoice->total_number_of_parcel,
         $invoice->city,
         $invoice['office_hamali'],
         $invoice['kata_hamali'],
         $invoice->service_charge,
         $invoice->total_charge,
         $invoice->payment
           
        ];
    }

    public function headings(): array
    {
        return [
            'क्रमांक',
            'पावती क्रमांक',
            'प्राकार',
            'मोटार क्रमांक',
             'मोटार शुल्क',
            'माल पाठवणार',
            'माल घेणार',
            'पार्सलची एकूण संख्या',
            'गांव',
            'ऑफिस हमाली',
            'काटा हमाली',
            'सेवा शुल्क',
            'एकूण',
            'पेमेंट',
        ];
    }
}
