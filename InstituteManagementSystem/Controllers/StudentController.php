<?php

namespace Modules\DoptorLtd\InstituteManagementSystem\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
/*use Modules\DoptorLtd\SupportTicketManagement\Requests\MdlStRequest;
use Modules\DoptorLtd\SupportTicketManagement\Models\MdlStTicket;
use Modules\DoptorLtd\SupportTicketManagement\Models\MdlStCategory;
use Modules\DoptorLtd\SupportTicketManagement\Models\MdlStReply;*/
use View;
class StudentController extends InstituteBaseController
{
    public function __construct() {
        parent::__construct();
    }

    public function getIndex()
    {
        $title = "All Students";
        $this->layout->title = $title;
        $this->layout->content = view("{$this->module_alias}::students.{$this->type}.index", compact(['title']));
    }
}
