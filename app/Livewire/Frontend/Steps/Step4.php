<?php

namespace App\Livewire\Frontend\Steps;

use App\Models\Frame;
use Livewire\Component;
use App\Models\Invitation;
use Carbon\Carbon;
use Hamcrest\Arrays\IsArray;
use Livewire\Attributes\Validate;

use function Pest\Laravel\put;

class Step4 extends Component
{

    public $details = [
        'hatan' => [
            'uid' => 'text-name1',
            'title' => 'שם החתן',
            'description' => 'הכנס את שם החתן',
            'error' => 'נא להכניס שם חתן',
            'original' => '',
            'value' => '',
        ],
        'kala' => [
            'uid' => 'text-name2',
            'title' => 'שם הכלה',
            'description' => 'הכנס את שם הכלה',
            'error' => 'נא להכניס שם כלה',
            'original' => '',
            'value' => '',
        ],
        'eventTimeReception' => [
            'uid' => 'text-time-reception',
            'title' => 'שעת קבלת פנים',
            'description' => 'הכנס את שעת קבלת הפנים',
            'error' => 'נא להכניס שעת קבלת פנים',
            'original' => '',
            'value' => '',
        ],
        'eventTimehupa' => [
            'uid' => 'text-time-hupa',
            'title' => 'שעת החופה',
            'description' => 'הכנס את שעת החופה',
            'error' => 'נא להכניס שעת החופה',
            'original' => '',
            'value' => '',
        ],
        'eventDate' => [
            'uid' => 'text-date-en',
            'title' => 'תאריך האירוע',
            'description' => 'הכנס את תאריך האירוע',
            'error' => 'נא להכניס תאריך אירוע',
            'original' => '',
            'value' => '',
        ],
        'eventDateHeb' => [
            'uid' => 'text-date-heb',
            'title' => 'תאריך עברי מחושב אוטומטית',
            'description' => 'הכנס את תאריך האירוע בעברי',
            'error' => 'נא להכניס תאריך אירוע בעברי',
            'original' => '',
            'value' => '',
        ],
        'invitationCongratsTop' => [
            'uid' => 'text-congrats-top',
            'title' => 'ברכה עליונה',
            'description' => 'ברכה שמופיעה בחלק העליון של הכרטיס',
            'error' => 'נא להכניס ברכה עליונה',
            'original' => '',
            'value' => '',
        ],
        'locationName' => [
            'uid' => 'text-location-name',
            'title' => 'שם האולם',
            'description' => 'הכנס את שם האולם',
            'error' => 'נא להכניס שם אולם',
            'original' => '',
            'value' => '',
        ],
        'locationAddress' => [
            'uid' => 'text-location',
            'title' => 'כתובת האולם',
            'description' => 'הכנס את כתובת האולם',
            'error' => 'נא להכניס כתובת אולם',
            'original' => '',
            'value' => '',
        ],
        'invitationCongratsBottom' => [
            'uid' => 'text-congrats-bottom',
            'title' => 'ברכה תחתונה',
            'description' => 'ברכה שמופיעה בחלק התחתון של הכרטיס',
            'error' => 'נא להכניס ברכה תחתונה',
            'original' => 'אנו שמחים ונרגשים להזמין אתכם לחגוג עמנו את יום נישואינו',
            'value' => '',
        ],
        'hatanParents' => [
            'uid' => 'text-parents1',
            'title' => 'שמות ההורים של החתן',
            'description' => 'הכנס את שמות ההורים של החתן',
            'error' => 'נא להכניס שמות ההורים של החתן',
            'original' => '',
            'value' => '',
        ],
        'kalaParents' => [
            'uid' => 'text-parents2',
            'title' => 'שמות ההורים של הכלה',
            'description' => 'הכנס את שמות ההורים של הכלה',
            'error' => 'נא להכניס שמות ההורים של הכלה',
            'original' => '',
            'value' => '',
        ],
        'hatanGrandparents' => [
            'uid' => 'text-grandparents1',
            'title' => 'שמות הסבים של החתן',
            'description' => 'הכנס את שמות הסבים של החתן',
            'error' => 'נא להכניס שמות הסבים של החתן',
            'original' => '',
            'value' => '',
        ],
        'kalaGrandparents' => [
            'uid' => 'text-grandparents2',
            'title' => 'שמות הסבים של הכלה',
            'description' => 'הכנס את שמות הסבים של הכלה',
            'error' => 'נא להכניס שמות הסבים של הכלה',
            'original' => '',
            'value' => '',
        ],
        'allowNoGluten' => [
            'uid' => 'checkbox-no-gluten',
            'title' => 'אפשרות למנה ללא גלוטן',
            'description' => 'בחירת מנה ללא גלוטן באישור ההגעה',
            'error' => 'נא להכניס אפשרות ללא גלוטן',
            'original' => '',
            'value' => '',
        ],
        'allowChildren' => [
            'uid' => 'checkbox-children',
            'title' => 'אפשרות למנה לילדים',
            'description' => 'בחירת מנה לילדים באישור ההגעה',
            'error' => 'נא להכניס אפשרות לילדים',
            'original' => '',
            'value' => '',
        ],
        'allowVegan' => [
            'uid' => 'checkbox-vegan',
            'title' => 'אפשרות למנה טבעונית',
            'description' => 'בחירת מנה טבעונית באישור ההגעה',
            'error' => 'נא להכניס אפשרות טבעונית',
            'original' => '',
            'value' => '',
        ],
        'invitationPhone' => [
            'uid' => 'text-phone',
            'title' => 'מספר טלפון שיוצג בכרטיס',
            'description' => 'הכנס את מספר הטלפון שיוצג בכרטיס',
            'error' => 'נא להכניס מספר טלפון שיוצג בכרטיס',
            'original' => '',
            'value' => '',
        ],

    ];

    public $date;

    public $hebDate;

    public $daySnameInHeb = [
        '0' => 'ראשון',
        '1' => 'שני',
        '2' => 'שלישי',
        '3' => 'רביעי',
        '4' => 'חמישי',
        '5' => 'שישי',
        '6' => 'שבת',
    ];


    public function mount()
    {
        // check steps
        if (!session()->has('frameId') || session()->get('frameId') == -1) {
            $this->dispatch('changeStep', 1);
        } else if (!session()->has('songId') || session()->get('songId') == -1) {
            $this->dispatch('changeStep', 2);
        } else if (!session()->has('effectId') || session()->get('effectId') == -1) {
            $this->dispatch('changeStep', 3);
        }

        // reset session details
        if (false) {
            session()->forget('details');
        }

        $this->getOrUpdateDetailsFromSession();

        // get frame details
        $frame = Frame::find(session()->get('frameId'));

        // get heb date
        $this->updateDate(Carbon::now()->format('Y-m-d'));
    }

    protected $rules = [
        'details.hatan.value' => 'required',
        'details.kala.value' => 'required',
        // 'details.eventTimeReception.value' => 'required',
        'details.eventTimehupa.value' => 'required',
        'details.eventDate.value' => 'required',
        'details.eventDateHeb.value' => 'required',
        // 'details.invitationCongratsTop.value' => 'required',
        'details.locationName.value' => 'required',
        'details.locationAddress.value' => 'required',
        'details.invitationCongratsBottom.value' => 'required',
        // 'details.hatanParents.value' => 'required',
        // 'details.kalaParents.value' => 'required',
        // 'details.hatanGrandparents.value' => 'required',
        // 'details.kalaGrandparents.value' => 'required',
        'details.allowNoGluten.value' => 'required',
        'details.allowChildren.value' => 'required',
        'details.allowVegan.value' => 'required',
        'details.invitationPhone.value' => 'required',
    ];

    public function updateDate($date)
    {
        $dateParts =  [
            'd' => Carbon::createFromFormat('Y-m-d', $date)->format('d'),
            'm' => Carbon::createFromFormat('Y-m-d', $date)->format('m'),
            'y' => Carbon::createFromFormat('Y-m-d', $date)->format('Y')
        ];

        $this->date = $date;
        // get the day name in heb
        $day = $this->daySnameInHeb[Carbon::createFromFormat('Y-m-d', $date)->format('w')];
        $this->hebDate = 'יום ' . $day . ' ' . mb_convert_encoding(jdtojewish(gregoriantojd($dateParts['m'], $dateParts['d'], $dateParts['y']), true), "UTF-8", "ISO-8859-8");

        $this->getOrUpdateDetailsFromSession(true, 'eventDate', $date);
        $this->getOrUpdateDetailsFromSession(true, 'eventDateHeb', $this->hebDate);


        $this->details['eventDate']['value'] = $date;
        $this->details['eventDateHeb']['value'] = $this->hebDate;
    }

    public function getOrUpdateDetailsFromSession($update = false, $key = null, $data = null)
    {
        if (!$update) {
            if (session()->has('details') && is_array(session()->get('details'))) {
                $this->details = session()->get('details');
            } else {
                session()->put('details', $this->details);
            }
        } else {
            if ($key != null && !is_array($data)) {
                $this->details[$key]['value'] = $data ?? '';
                session()->put('details', $this->details);
            } else if ($key != null && is_array($data)) {
                foreach ($data as $key => $value) {
                    $this->details[$key]['value'] = $value;
                }
                session()->put('details', $this->details);
            }
        }
    }

    public function saveDetails()
    {
        // dd('save details');
        $this->validate();

        $invitation = Invitation::create([
            'frame_id' => session()->get('frameId'),
            'song_id' => session()->get('songId'),
            'effect_id' => session()->get('effectId'),
            'details' => $this->details,
        ]);

        session()->put('invitationId', $invitation->id);

        return redirect()->route('preview', ['invitation_id' => $invitation->id]);
    }


    public function render()
    {
        return view('livewire.frontend.steps.step4');
    }
}
