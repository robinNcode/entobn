<?php

class EnglishToBanglaDate{

    private $engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    private $engNth = array('st', 'nd', 'rd', 'th');
    private $engDay = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    private $engOporannho = array('am', 'pm');
    private $engMonth = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

    private $bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
    private $bangNth = array('তম');
    private $bangDay = array('রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার');
    private $bangOporannho = array('পূর্বাহ্ন', 'অপরাহ্ন');
    private $bangMonth = array('জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');

    public function banglaDigit($english_date) {
        return str_replace($this->engNumber, $this->bangNumber, $english_date);
    }

    public function banglaMonth($english_date){
        return str_replace($this->engMonth, $this->bangMonth, $english_date);
    }

    public function banglaDay($english_date){
        return str_replace($this->engDay, $this->bangDay, $english_date);
    }

    public function banglaOporannho($english_date){
        return str_replace($this->engOporannho, $this->bangOporannho, $english_date);
    }

    public function banglaNth($english_date){
        return str_replace($this->engNth, $this->bangNth, $english_date);
    }

    public function banglaDate($english_date){
        $english_date = date('h:i a jS F, Y', strtotime($english_date));

        $bangla_date = $this->banglaDigit($english_date);
        $bangla_date = $this->banglaNth($bangla_date);
        $bangla_date = $this->banglaDay($bangla_date);
        $bangla_date = $this->banglaOporannho($bangla_date);
        $bangla_date = $this->banglaMonth($bangla_date);

        return $bangla_date;
    }
}