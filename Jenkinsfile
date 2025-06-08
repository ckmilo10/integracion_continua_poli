pipeline {
    agent any // Esta línea es correcta y solo debe ir una vez

    stages {
        stage('Checkout') {
            steps {
                echo 'Codigo GIT en estado de obtención.'
            }
        }

        stage('Install Dependencies & PHP Lint') {
            steps {
                script {
                    echo 'Simulando instalación de dependencias y lint de PHP.'
                }
            }
        }

        stage('Run PHPUnit Tests') {
            steps {
                script {
                    echo 'Realizando pruebas unitarias..-'
                }
            }
        }

        stage('Deploy to Docker Environment') {
            steps {
                script {
                    echo 'El código ya está en el volumen local de Docker Compose. Recargando servicios si es necesario.'
                    sh 'echo "Aplicación desplegada al entorno Docker." > deploy_log.txt'
                }
            }
        }
    }

    // El bloque 'post' va aquí, al final del único bloque 'pipeline'
    post {
        always {
            echo 'Pipeline finalizado. Validando resultados...'
        }
        success {
            echo '¡Pipeline ejecutado de manera correcta!'
            // Envío de correo de éxito
            mail bcc: '', body: "El Pipeline '${env.JOB_NAME}' - Build #${env.BUILD_NUMBER} ha sido exitoso.\nURL: ${env.BUILD_URL}", cc: '', from: '', replyTo: '', subject: "Jenkins CI: ${env.JOB_NAME} - ÉXITO", to: 'cguacaneme04@gmail.com'
        }
        failure {
            echo 'Se ha presentado un error durante la ejecución del pipeline.'
            // Envío de correo de fallo
            mail bcc: '', body: "El Pipeline '${env.JOB_NAME}' - Build #${env.BUILD_NUMBER} ha FALLADO.\nPor favor, revisa el log:\nURL: ${env.BUILD_URL}", cc: '', from: '', replyTo: '', subject: "Jenkins CI: ${env.JOB_NAME} - FALLO CRÍTICO", to: 'cguacaneme04@gmail.com'
        }
        // Puedes añadir 'unstable', 'aborted', 'fixed' para otras condiciones
    }
}