# Flipflop

## Setup

### Inital configuration
- Modify public folder name to match server public folder name ( as needed)
- Update `bootstrap/paths.php`
    - update public key
- Update `app/config/app.php` (as needed)
- Update `app/config/database.php` (as needed)
- Update `app/config/mail.php` (as needed)
- Create `app/config/payments.php`
    - Add Stripe config details

### Environment configuration
- Modify `bootstrap\start.php`
    - Modify `$env` variables to match your machine names
- Create new folder: `app/config/local`
    - Create local configuration files
        - `app\config\local\app.php`
        - `app\config\local\database.php`
        - `app\config\local\mail.php`
        - `app\config\local\payments.php`
