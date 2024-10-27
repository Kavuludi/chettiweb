<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage()
    {
    }

    //About Us
    public function Aboutbriefhistory()
    {
        return view('about/briefhistory');
    }
    public function AboutMissionVission()
    {
        return view('about/vissionmission');
    }

    public function AboutbrieCsr()
    {
        return view('about/csr');
    }
    public function AboutNationalAnthem()
    {
        return view('about/anthems/national_anthem');
    }
    public function AboutNacanthem()
    {
        return view('about/anthems/nac_anthem');
    }
    public function AboutCHettiAnthem()
    {
        return view('about/anthems/chetti_anthem');
    }
    public function AboutOrganogram()
    {
        return view('about/organogram');
    }
    public function AboutStrategicPlan()
    {
        return view('about/strategic_plan');
    }
    public function Aboutservice_delivery()
    {
        return view('about/service_delivery');
    }
    public function AboutQualityPolicy()
    {
        return view('about/qualitypolicy');
    }
    public function AboutIsoCert()
    {
        return view('about/iso_certification');
    }
    public function AboutEnviroment()
    {
        return view('about/enviroment');
    }
    public function AboutRDI()
    {
        return view('about/rdi');
    }

    //Administration
    public function Principal()
    {
        return view('Administration/governance/principal');
    }
    public function Bog()
    {
        return view('Administration/governance/bog');
    }
    public function DeputyPrincipal()
    {
        return view('Administration/deputyprincipal');
    }
    public function RegistrarAdministration()
    {

        return view('Administration/registrar');
    }


    //Academics
    public function RegistrarExaminations()
    {

        return view('academics/registrar_exam');
    }

    public function career_service()
    {
        return view('academics/career_service');
    }
    public function industrial_office()
    {
        return view('academics/industrial_office');
    }
    public function acd_engineering()
    {
        return view('academics/acd_engineering');
    }
    public function acd_hospitality()
    {
        return view('academics/acd_hospitality');
    }

    public function acd_business()
    {
        return view('academics/acd_business');
    }
    public function acd_ict()
    {
        return view('academics/acd_ict');
    }

    public function adm_procedure()
    {
        return view('academics/adm_procedure');
    }
    public function application_forms()
    {
        return view('academics/application_forms');
    }
    public function online_application()
    {
        return view('academics/online_application');
    }
    public function e_learning()
    {
        return view('academics/e_learning');
    }
    public function brochure()
    {
        return view('academics/brochure');
    }
    //Staff Welfare
       public function dean_staff()
    {
        return view('staffportal/dean_staff');
    }

    public function staff_welfare()
    {
        return view('staffportal/staff_welfare');
    }

    //Students Welfare
    public function dean_student()
    {
        return view('student_portal/dean_student');
    }

    public function student_login()
    {

        return view('student_portal/student_login');
    }
    public function student_leadership()
    {

        return view('student_portal/student_leadership');
    }

    public function athletics()
    {
        return view('student_portal/student_activities/athletics');
    }

    public function ball_games()
    {

        return view('student_portal/student_activities/ball_games');
    }

    public function club_societies()
    {

        return view('student_portal/student_activities/club_societies');
    }
    public function drama_music()
    {

        return view('student_portal/student_activities/drama_music');
    }

    public function student_attire()
    {
        return view('student_portal/student_attire');
    }

    public function meal_accomodation()
    {
        return view('student_portal/meal_accomodation');
    }


    public function kuccps()
    {
        return view('student_portal/student_financing/kuccps');
    }

    public function helb()
    {
        return view('student_portal/student_financing/helb');
    }

    public function others()
    {
        return view('student_portal/student_financing/others');
    }
    //Milestones

    public function mentorship()
    {
        return view('milestone/mentorship');
    }

    public function dedication()
    {
        return view('milestone/dedication');
    }

    public function pioneer_group()
    {
        return view('milestone/pioneer_group');
    }

    public function readmore()
    {
        return view('about/readmore');
    }

    public function courses()
    {
        return view('about/courses');
    }
    public function contacts()
    {
        return view('about/contacts');
    }
    public function modeofapplication()
    {
        return view('about/modeofapplication');
    }
    public function applicationforms()
    {
        return view('about/applicationforms');
    }
    //Downloads
    public function tenders()
    {
        return view('about/tenders');
    }
    public function vacancies()
    {
        return view('about/vacancies');
    }
    public function newsletter()
    {
        return view('about/newsletter');
    }
    public function gallery()
    {
        return view('about/gallery');
    }
    public function videos()
    {
        return view('about/videos');
    }
}
