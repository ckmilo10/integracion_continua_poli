pipeline {
    agent any 

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

    post {
        always {
            echo 'Pipeline finalizado. Validando resultados...'
        }
        success {
            echo '¡Pipeline ejecutado de manera correcta!'
        }
        failure {
            echo 'Se ha presentado un error durante la ejecución del pipeline.'
        }
    }
}

pipeline {
    agent any

    stages {
        // ... Tus etapas existentes (Checkout, Install, Tests, Deploy) ...
        stage('Checkout') {
            steps {
                echo 'Código obtenido del repositorio Git.'
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
                    echo 'Simulando ejecución de pruebas PHPUnit.'
                }
            }
        }

        stage('Deploy to Docker Environment') {
            steps {
                script {
                    echo 'Aplicación desplegada al entorno Docker.'
                }
            }
        }
    }

    // Sección para notificaciones post-build
    post {
        always {
            // Este paso se ejecuta siempre, independientemente del resultado del build
            echo 'Pipeline finalizado. Verificando estado para notificaciones...'
        }
        success {
            // Este paso se ejecuta solo si el build fue exitoso
            echo '¡Pipeline ejecutado con ÉXITO! Enviando notificación por correo.'
            // Envía un correo de éxito
            mail bcc: '', body: "El Pipeline '${env.JOB_NAME}' - Build #${env.BUILD_NUMBER} ha sido exitoso.\nURL: ${env.BUILD_URL}", cc: '', from: '', replyTo: '', subject: "Jenkins CI: ${env.JOB_NAME} - ÉXITO", to: 'cguacaneme04@gmail.com'
        }
        failure {
            // Este paso se ejecuta solo si el build falló
            echo 'El Pipeline FALLÓ. Enviando notificación por correo.'
            // Envía un correo de fallo
            mail bcc: '', body: "El Pipeline '${env.JOB_NAME}' - Build #${env.BUILD_NUMBER} ha FALLADO.\nPor favor, revisa el log:\nURL: ${env.BUILD_URL}", cc: '', from: '', replyTo: '', subject: "Jenkins CI: ${env.JOB_NAME} - FALLO CRÍTICO", to: 'cguacaneme04@gmail.com'
        }
        // Puedes añadir 'unstable', 'aborted', 'fixed' para otras condiciones
    }
}