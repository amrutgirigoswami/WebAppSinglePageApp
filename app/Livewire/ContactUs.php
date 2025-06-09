<?php

namespace App\Livewire;

use Livewire\Component;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ];
    public function submit()
    {
        $this->validate();

        session()->flash('success', 'Thank you for contacting us! We will get back to you soon.');

        $this->reset(['name', 'email', 'message']);
        $this->redirect(route('contact-us'),navigate:true);
        // Here you can handle the form submission, like sending an email or saving to the database.
        // For example:
        // Mail::to('admin@example.com')->send(new ContactFormSubmitted($this->name, $this->email, $this->message));
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
