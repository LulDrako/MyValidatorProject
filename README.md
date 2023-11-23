# MyValidatorProject

Welcome to the Composer Validator Suite, a comprehensive toolset designed for validating and managing `composer.json` files with support for multiple languages.

## Features

- **MakeMyValidatorCommand**: Generates validators for `composer.json` files based on specified language codes.
- **ValidateComposerCommand**: Validates `composer.json` files and logs the results, with multi-language support.
- **Language Support**: English (en), Thai (th), and Chinese (ch), easily extendable for additional languages.

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- Symfony 5.0 or higher
- Symfony Translation component

### Installation

1. Clone the repository:
git clone [repository-url]

2. Navigate to the project directory:
cd [project-directory]

3. Install dependencies:
composer install

4. Install the Symfony Translation component (if not already included):
composer require symfony/translation

### Usage

- Create a validator:
php bin/console make:my-validator [language-code]

- Validate a composer file:
php bin/console app:validate-composer [path-to-composer.json] --lang=[language-code]

## Technical Details

- Adheres to SOLID principles for robust and maintainable object-oriented programming.
- Localization is handled by the `FooLog` class, facilitating easy extension to more languages.

## Contributing

Contributions are welcomed and greatly appreciated. To contribute:

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request
