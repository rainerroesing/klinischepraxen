<?php

return function ($kirby, $site, $pages, $page) {
    $alert = null;

    if ($kirby->request()->is('POST') && get('submit')) {
        // check the honeypot
        if (empty(get('contact_me_by_fax_only')) === false) {
            go($page->url());
            exit;
        }

        // Import fields data
        $data = [
            'name'  => get('name'),
            'email' => get('email'),
            'geburtsdatum' => get('geburtsdatum'),
            'text'  => get('text'),
            'r_an_a'  => get('r_an_a'),
            'r_med_a'  => get('r_med_a'),
            'select_a'  => get('select_a'),
            'rezept_erhalt' => get('rezept_erhalt'),
            'r_an_b'  => get('r_an_b'),
            'r_med_b'  => get('r_med_b'),
            'select_b'  => get('select_b'),
            'r_an_c'  => get('r_an_c'),
            'r_med_c'  => get('r_med_c'),
            'select_c'  => get('select_c'),
            'r_an_d'  => get('r_an_d'),
            'r_med_d'  => get('r_med_d'),
            'select_d'  => get('select_d'),
            'r_an_e'  => get('r_an_e'),
            'r_med_e'  => get('r_med_e'),
            'select_e'  => get('select_e'),
            'r_an_f'  => get('r_an_f'),
            'r_med_f'  => get('r_med_f'),
            'select_f'  => get('select_f'),
            'r_an_g'  => get('r_an_g'),
            'r_med_g'  => get('r_med_g'),
            'select_g'  => get('select_g'),
            'r_an_h'  => get('r_an_h'),
            'r_med_h'  => get('r_med_h'),
            'select_h'  => get('select_h'),
            'r_an_i'  => get('r_an_i'),
            'r_med_i'  => get('r_med_i'),
            'select_i'  => get('select_i'),
            'r_an_j'  => get('r_an_j'),
            'r_med_j'  => get('r_med_j'),
            'select_j'  => get('select_j'),
        ];

        // Field rules
        $rules = [
            'name'  => ['required', 'min' => 3],
            'email' => ['required', 'email'],
            'geburtsdatum' => ['required'],
            'rezept_erhalt' => ['required'],
            //'text'  => ['required', 'min' => 3, 'max' => 3000],
        ];

        // Alert messages for the rules
        $messages = [
            'name'  => esc($site->labelAlertName()->or('Please enter a valid name')),
            'email' => esc($site->labelAlertEmail()->or('Please enter a valid email address')),
            'geburtsdatum' => 'Bitte geben Sie Ihr Geburtsdatum an',
            'rezept_erhalt' => 'Bitte wählen Sie aus, wie Sie Ihr Rezept erhalten möchten',
            //'text'  => esc($site->labelAlertMessage()->or('Please enter a text between 3 and 3000 characters'))
        ];

        // some of the data is invalid
        if ($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

        // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'emailrezept',
                    'from'     => esc($site->email()),
                    'replyTo'  => $data['email'],
                    'to'       => esc($site->email()),
                    'subject'  => esc($data['name']) . ' ' . esc($site->labelEmailSubject()->or('sent you a message from your contact form')),
                    'data'     => [
                        'text'   => esc($data['text']),
                        'sender' => esc($data['name']),
                        'email' => esc($data['email']),
                        'geburtsdatum' => esc($data['geburtsdatum']),
                        'rezept_erhalt' => esc($data['rezept_erhalt']),
                        'r_an_a' => $data['r_an_a'],
                        'r_med_a' => esc($data['r_med_a']),
                        'select_a' => esc($data['select_a']),
                        'r_an_b' => $data['r_an_b'],
                        'r_med_b' => esc($data['r_med_b']),
                        'select_b' => esc($data['select_b']),
                        'r_an_c' => $data['r_an_c'],
                        'r_med_c' => esc($data['r_med_c']),
                        'select_c' => esc($data['select_c']),
                        'r_an_d' => $data['r_an_d'],
                        'r_med_d' => esc($data['r_med_d']),
                        'select_d' => esc($data['select_d']),
                        'r_an_e' => $data['r_an_e'],
                        'r_med_e' => esc($data['r_med_e']),
                        'select_e' => esc($data['select_e']),
                        'r_an_f' => $data['r_an_f'],
                        'r_med_f' => esc($data['r_med_f']),
                        'select_f' => esc($data['select_f']),
                        'r_an_g' => $data['r_an_g'],
                        'r_med_g' => esc($data['r_med_g']),
                        'select_g' => esc($data['select_g']),
                        'r_an_h' => $data['r_an_h'],
                        'r_med_h' => esc($data['r_med_h']),
                        'select_h' => esc($data['select_h']),
                        'r_an_i' => $data['r_an_i'],
                        'r_med_i' => esc($data['r_med_i']),
                        'select_i' => esc($data['select_i']),
                        'r_an_j' => $data['r_an_j'],
                        'r_med_j' => esc($data['r_med_j']),
                        'select_j' => esc($data['select_j']),
                    ]
                ]);
            } catch (Exception $error) {
                $alert['error'] = esc($site->labelFormError()->or('The form could not be sent'));
            }

            // no exception occured, let's send a success message
            if (empty($alert) === true) {
                $success = esc($site->labelFormSuccess()->or('Your message has been sent, thank you. We will get back to you soon!'));
                $data = [];
            }
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};
