node {
    stage('Checkout') {
        checkout scm
    }

    stage('Provision') {
        sh 'composer install'
        sh 'yarn install'
    }

    stage('Run Tests') {
        sh 'vendor/bin/phpunit tests'
    }

    stage('PSR-2 Standards') {
        sh 'phpcs --standard=PSR2 src/'
    }
}
