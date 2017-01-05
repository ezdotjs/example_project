node {
    stage 'Checkout'

    git credentialsId: '', url: ''

    stage 'Install dependencies'

    sh 'composer install'

    stage 'Run tests'

    sh 'vendor/bin/phpunit'
}
