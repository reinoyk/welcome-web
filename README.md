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

<<<<<<< HEAD
**UI Elements:**
- Centered container with white background
- Rounded corners (10px radius)
- Subtle box shadow for depth
- Simple navigation link

![Welcome Page Screenshot](screenshots/welcome-page.jpeg)
=======
<img width="1600" height="847" alt="image" src="https://github.com/user-attachments/assets/12c3b75d-7a97-493d-8de3-a19e71ea2cda" />

>>>>>>> 55449e12d869e3cd55b68c17282aebe355cbd5f6

### 2. About Page (/About)

This page displays three fun facts about me in a list format:
- Fun Fact 1: I love to play basketball
- Fun Fact 2: I can play the guitar  
- Fun Fact 3: I like the color blue

**UI Elements:**
- White container with 40px padding
- Each fun fact in a gray box (`#e9e9e9`) with:
  - 15px padding
  - 8px rounded corners
  - 10px bottom margin
  - Hover effect (darker gray `#dcdcdc`)
- Blue links for navigation
- "Back to home" link at the bottom

![About Page Screenshot](screenshots/about-page.png)
=======
<img width="1600" height="854" alt="image" src="https://github.com/user-attachments/assets/79443c6f-9a8d-4361-9ba4-15053e06ca91" />


### 3. Details Page (/About/{id})

When clicking on a fun fact, users are taken to a details page that expands the fact into a full paragraph story in English.

**UI Elements:**
- Same container style as About page for consistency
- Gray content box (`#e9e9e9`) with 30px padding
- Three sections per fun fact:
  - **Title**: Bold, 1.2em font size
  - **Fact**: Bold text showing the original fact
  - **Story**: Detailed paragraph with 1.6 line height for readability
- Back navigation link

**Content for Each Fun Fact:**

#### Basketball (ID: 1)
> Basketball has been my passion since childhood. I started playing when I was 10 years old at the local community center, and it quickly became more than just a hobby. The feeling of dribbling down the court, the satisfaction of making a perfect shot, and the camaraderie with teammates have shaped who I am today. Whether it's a casual game with friends or watching professional matches, basketball continues to be a significant part of my life, teaching me discipline, teamwork, and perseverance.

![Details Page - Basketball Screenshot](screenshots/details-basketball.png)

#### Guitar (ID: 2)
> My journey with the guitar began five years ago when I received an acoustic guitar as a birthday gift. What started as curiosity quickly transformed into a deep love for music. I taught myself through online tutorials and countless hours of practice, learning everything from classic rock riffs to gentle acoustic melodies. Playing the guitar has become my creative outlet and stress reliever, allowing me to express emotions that words cannot capture. The ability to create music with my own hands brings me immense joy and satisfaction.

![Details Page - Guitar Screenshot](screenshots/details-guitar.png)

#### Blue Color (ID: 3)
> Blue has always been more than just a color preference for me—it represents tranquility and depth. From the calming blue of the ocean to the endless possibilities of a clear blue sky, this color has consistently drawn my attention and admiration. I find myself naturally gravitating towards blue in my clothing choices, room decorations, and even in the art I appreciate. There's something about blue that brings me peace and clarity, making it not just my favorite color but a reflection of my personality and outlook on life.

![Details Page - Blue Color Screenshot](screenshots/details-blue.png)

## Technical Information

- **Framework**: Laravel 11.x
- **PHP Version**: 8.2+
- **Styling**: Custom inline CSS
- **Template Engine**: Blade
- **Routing**: Web routes defined in `routes/web.php`
- **Views**: Blade templates located in `resources/views/components/`

## Installation

1. Clone the repository
```bash
git clone https://github.com/reinoyk/welcome-web.git
cd welcome-web
```

2. Install dependencies
```bash
composer install
npm install
```

3. Copy the environment file
```bash
cp .env.example .env
```

4. Generate application key
```bash
php artisan key:generate
```

5. Run the development server
```bash
php artisan serve
```

6. Access the application at `http://localhost:8000`

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

## CSS Styling Details

### Common Styles Used
```css
/* Body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    text-align: center;
}

/* Container styling */
.container {
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 600px;
}

/* Interactive elements */
li:hover {
    background-color: #dcdcdc;
    transition: background-color 0.3s ease;
}
```

## Future Enhancements

- Add more fun facts
- Implement database storage for fun facts
- Add image support for each fun fact
- Create an admin panel for managing content
- Add animations and transitions
- Implement a contact form
=======
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
        ["name" => "Funfact 1", "fact" =    > "I love to play basketball", "id" => 1],
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
