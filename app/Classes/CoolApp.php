<?php
namespace App\Classes;

use App\Models\EmailTemplate;
use App\Models\Generalsetting;
use App\Models\Order;
use PDF;
use Illuminate\Support\Facades\Mail;
use Config;

class CoolApp{
    public function getScriptVariables()
    {
      return json_encode([
          'csrfToken' => csrf_token(),
      ]);
    }
}