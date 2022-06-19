<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::insert([
            'question' => "How can you print a document from your laptop at HZ?",
            'answer' => "You can print a document from your laptop by visiting http://print.hz.nl/
             After authenticating, you can upload the file you would like to print.",
        ]);

        Faq::insert([
            'question' => "How can you scan a document and send it to your laptop at HZ?",
            'answer' => "Register using your HZ Pass on the TouchID next to the printer.
             Select 'Scanning - Scan' in the menu.",
        ]);

        Faq::insert([
            'question' => "What do you need to do when you are sick / show symptoms of coronavirus?",
            'answer' => "Stay home and tell your SCC that you are sick so that
             you can have online classes. If the symptoms get worse,
             contact your GP or the GGD",
        ]);

        Faq::insert([
            'question' => "How can you book a project space in one of the wings?",
            'answer' => "If you want to book a project space visit https://topdesk.hz.nl/tas/public/ssp/
             Make sure you are logged in, and select 'New Reservation' followed by
            'Book project group rooms'",
        ]);

        Faq::insert([
            'question' => "What are the instructions if you want to park your car at the HZ parking lot?",
            'answer' => "First of all make sure to activate your HZ Pass for parking at the help desk.
             Free parking is available on the PZEM parking lot at Poelendaelesingel 10 in Middelburg.",
        ]);
    }
}