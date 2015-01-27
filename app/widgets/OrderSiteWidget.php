<?php

class OrderSiteWidget extends BaseController {

    public function button()
    {
        return (string) View::make('widgets.orderSite.button')->render();
    }

    public function form()
    {
        return (string) View::make('widgets.orderSite.form')->render();
    }

    public function orderPost()
    {
        $data = Input::all();

        $rules = [
            'name' => 'required|min:3',
            'email' => 'email',
            'phone' => 'numeric',
            'site_type' => 'required|numeric',
            'message' => '',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            $contact = new Order();
            $contact->fill($data);
            $contact->ip = Request::getClientIp();
            if ($contact->save()) {
                Mail::queue('emails.orderSiteToAdmin', $data, function ($message) use ($data) {
                    $message->from($data['email'], $data['name']);
                    $message->to(Config::get('params.adminEmail'), 'Администратор')->subject(Config::get('params.orderSiteSubjectToAdmin'));
                });
                Mail::queue('emails.orderSiteToUser', $data, function ($message) use ($data) {
                    $message->from(Config::get('params.adminEmail'), 'Администратор');
                    $message->to($data['email'], $data['name'])->subject(Config::get('params.orderSiteSubjectToUser'));
                });
                return Redirect::back()
                    ->with('successMessage', Config::get('params.orderSiteSuccess'));
            }
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

}