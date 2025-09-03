# Welcome Web - Laravel Project

**Name:** Reino Yuris Kusumanegara 
**NRP:** 5025231075
## Project Description

This is a simple Laravel web application that showcases personal information and fun facts about me. The website consists of a welcome page that serves as the main landing page and an about section where visitors can explore interesting facts about me in more detail.

## Features

- **Welcome Page**: A clean and simple landing page with navigation to the About section
- **About Page**: Displays a list of fun facts about me
- **Details Page**: Shows detailed stories for each fun fact when clicked
- **Responsive Design**: All pages are centered and adapt to different screen sizes
- **Consistent UI**: Maintains visual consistency across all pages

## Pages Overview

### 1. Welcome Page (/)
The main landing page of the website with a simple interface and navigation link to the About page.

<img width="1600" height="847" alt="image" src="https://github.com/user-attachments/assets/12c3b75d-7a97-493d-8de3-a19e71ea2cda" />


### 2. About Page (/About)

This page displays three fun facts about me in a list format:
- Fun Fact 1: I love to play basketball
- Fun Fact 2: I can play the guitar  
- Fun Fact 3: I like the color blue

<img width="1600" height="854" alt="image" src="https://github.com/user-attachments/assets/79443c6f-9a8d-4361-9ba4-15053e06ca91" />


### 3. Details Page (/About/{id})

When clicking on a fun fact, users are taken to a details page that expands the fact into a full paragraph story in English.

<img width="1600" height="847" alt="image" src="https://github.com/user-attachments/assets/fe98fa09-2aa0-4c87-b9d6-44cd03f20f65" />


## Project Structure

```
welcome-web/
├── app/
├── resources/
│   └── views/
│       ├── welcome.blade.php          # Welcome page
│       └── components/
│           ├── about.blade.php        # About page with fun facts list
│           └── details.blade.php      # Details page for individual fun facts
├── routes/
│   └── web.php                        # Application routes
├── public/
└── screenshots/                       # Screenshots for documentation
```

## Routes Configuration

```php
// Welcome page
Route::get('/', function () {
    return view('welcome');
});

// About page - displays all fun facts
Route::get('/About', function () {
    $funfact = [
        ["name" => "Funfact 1", "fact" => "I love to play basketball", "id" => 1],
        ["name" => "Funfact 2", "fact" => "I can play the guitar", "id" => 2],
        ["name" => "Funfact 3", "fact" => "I like the color blue", "id" => 3],
    ];
    return view('components.about', ["funfact" => $funfact]);
});

// Details page - displays specific fun fact with story
Route::get('/About/{id}', function ($id) {
    $funfact = [
        ["name" => "Funfact 1", "fact" => "I love to play basketball", "id" => 1],
        ["name" => "Funfact 2", "fact" => "I can play the guitar", "id" => 2],
        ["name" => "Funfact 3", "fact" => "I like the color blue", "id" => 3],
    ];
    
    $selectedFact = collect($funfact)->firstWhere('id', $id);
    
    if (!$selectedFact) {
        abort(404);
    }
    
    return view('components.details', ["funfact" => $selectedFact]);
});
```

