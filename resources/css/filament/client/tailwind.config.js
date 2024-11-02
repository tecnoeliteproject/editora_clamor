import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/Client/**/*.php',
        './resources/views/filament/client/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
