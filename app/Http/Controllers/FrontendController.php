<?php


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use App\Models\Students;
use DataTables,Auth;
use DB;

class FrontendController extends Controller
{
	public function index()
	{
		echo "Comming soon...";
		exit;
	}
	
	public function generateQrCode($id)
    {
        $id_enc = $id;
        $id = $this->enc($id, true);
        $data = Students::find($id);
        if (!$data) {
            return redirect()->route('certificate.list');
        }

        $link = 'https://techalphainstitute.com/certificate/'. $id_enc;
        $qrCode = QrCode::format('png')->size(300)->margin(15)->generate($link);
        $stu_name = str_replace([' ', '.'], '_', $data->name);
        $filename = $stu_name.'_' . $id_enc . '.png';

        return response($qrCode)
        ->header('Content-type', 'image/png')
        ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
        
         return redirect()->back();
    }
	
	public function view_student($id)
    {
        $id = $this->enc($id, true);
        $data = Students::find($id);
        if (!$data) {
            return redirect()->route('certificate.list');
        }
        
        $link = asset('admin/usericon.png');
        if ($data->student_image) {
            $link = asset('upload/students/'.$data->student_image);
        }
        $data->student_image = $link;
        $data->complition_date = date('d F, Y', strtotime($data->complition_date));
        $is_back = '';
        $page_title = 'Certificate';

        return view('admin.homebanner.view', compact('data','page_title','is_back'));
    }
}