<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInquiry;
use App\Models\CareerInquiry;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{
    public function contact_list()
    {
        $list = ContactInquiry::all();
        return view('admin.inquiry.contact.list', compact(
            'list',
        ));
    }

    public function contact_delete($id)
    {
        $id = $this->enc($id, true);
        $old_data = ContactInquiry::find($id);
        if ($old_data) {
            $old_data->delete();
            session()->flash('success', 'Data Removed.');
        }
        return redirect()->route('contact-list');
    }
}
