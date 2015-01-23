<?php

class SiteController extends BaseController
{

    public function index()
    {
        View::share('model', Pages::getPageByAlias());
        return View::make('index');
    }

    public function page($alias)
    {
        View::share('model', Pages::getPageByAlias($alias));
        return View::make('page');
    }

    public function subPage($parentAlias, $alias)
    {
        View::share('model', Pages::getPageByAlias($alias));
        return View::make('page');
    }

    public function contact()
    {
        View::share('model', Pages::getPageByAlias('kontakty'));
        return View::make('contact');
    }

    public function contactPost()
    {
        $data = Input::all();

        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'numeric',
            'message' => 'required|min:5',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            $contact = new Contact();
            $contact->fill($data);
            $contact->ip = Request::getClientIp();
            if ($contact->save()) {
                Mail::queue('emails.contactToAdmin', $data, function ($message) use ($data) {
                    $message->from($data['email'], $data['name']);
                    $message->to(Config::get('params.adminEmail'), 'Администратор')->subject('params.contactSubjectToAdmin');
                });
                Mail::queue('emails.contactToUser', $data, function ($message) use ($data) {
                    $message->from(Config::get('params.adminEmail'), 'Администратор');
                    $message->to($data['email'], $data['name'])->subject(Config::get('params.contactSubjectToUser'));
                });
                return Redirect::back()
                    ->with('successMessage', 'Ваше сообщение успешно отправлено. Спасибо!');
            }
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    public function getContactForm()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::all();

        //Validation rules
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'numeric|between:10,11',
            'message' => 'required|min:5'
        ];

        //Validate data
        $validator = Validator::make($data, $rules);

        //If everything is correct than run passes.
        if ($validator->passes()) {

            Mail::send('emails.feedback', $data, function ($message) use ($data) {
                //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields
                $message->from('feedback@gmail.com', 'feedback contact form');
                //email 'To' field: cahnge this to emails that you want to be notified.
                $message->to('feedback@gmail.com', 'John')->cc('feedback@gmail.com')->subject('feedback form submit');

            });
            // Redirect to page
            return Redirect::action('SiteController@contact')
                ->with('message', 'Your message has been sent. Thank You!');


            //return View::make('contact');
        } else {
            //return contact form with errors
            return Redirect::route('SiteController@contact')
                ->with('error', 'Feedback must contain more than 5 characters. Try Again.');

        }
    }


    public function prices()
    {
        View::share('model', Pages::getPageByAlias('tseny'));
        return View::make('prices');
    }

    public function portfolio()
    {
        View::share('model', Pages::getPageByAlias('primery-rabot'));
        return View::make('portfolio');
    }

    public function sitemap()
    {
        $pages = Pages::whereParentId(0)
            ->where('published_at', '<', date('Y-m-d H:i:s'))
            ->where('is_published', 1)
            ->with('children')
            ->get(['id', 'published_at', 'is_published', 'alias', 'menu_title', 'title']);

        View::share('model', Pages::getPageByAlias('karta-sajta'));
        return View::make('sitemap')->with('pages', $pages);
    }

    public function sitemapXml()
    {
        $pages = Pages::whereParentId(0)
            ->where('published_at', '<', date('Y-m-d H:i:s'))
            ->where('is_published', 1)
            ->with('children')
            ->get(['id', 'published_at', 'is_published', 'alias', 'updated_at']);

        $content = View::make('sitemapXml')->with('pages', $pages);
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }

}
