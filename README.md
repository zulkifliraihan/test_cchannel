## 1. Queue Problem

Problem

- Imagine we are integrating an Email Service Provider into our app.
- We need to send mass emails to announce a new campaign with 50k influencers at same time.
- The ESP limits our sending process to 119/hour

Your Task

- Clone this repository [https://github.com/lemon-platform/lemon-test-queue-problem](https://github.com/lemon-platform/lemon-test-queue-problem)
- Create database on `/database/database.sqlite`
- Run `php artisan migrate:fresh --seed` to seed with 50k influencers
- Create a command to send notifications to all influencers `php artisan lemon:blast-new-campaign`
- The `handle()` function will create a job to notify all influencers about the new campaign
- Use `MailMessage` to notify influencers via email

```php
<?php

(new MailMessage)
  ->greeting('Hello!')
  ->line('We have a new campaign for you')
  ->line('Try new beauty product from Revlon')
  ->action('View Campaign', 'https://www.google.com');
```

- Prepare your explanations in meeting with your repository prepared

Scoring

- Demonstrate how you build
    - [ ]  Dev environment with Laravel + MailHog
    - [ ]  Laravel command `php artisan lemon:blast-new-campaign`
    - [ ]  jobs to send notifications to influencers
    - [ ]  create notifications with `MailMessage`
- Demonstrate how you throttle email sending
    - [ ]  Without timeout
    - [ ]  Sending limit below process
    - [ ]  Monitor job task with Laravel Horizon

Reference

1. [https://www.helloinbox.email/#reputation](https://www.helloinbox.email/#reputation) on warmup section
2. Job Middleware [https://laravel.com/docs/9.x/queues#job-middleware](https://laravel.com/docs/9.x/queues#job-middleware)
3. Notification [https://laravel.com/docs/9.x/notifications](https://laravel.com/docs/9.x/notifications)
