pipeline {
    agent any // Ejecuta el pipeline en cualquier agente disponible

    stages {
        stage('Checkout') {
            steps {
                // Jenkins automáticamente hace un 'git clone' si configuraste el SCM
                echo 'Código obtenido del repositorio Git.'
            }
        }

        stage('Install Dependencies & PHP Lint') {
            steps {
                script {
                    // Si usas Composer para dependencias de PHP:
                    // sh 'composer install --no-dev --prefer-dist'
                    // Asegúrate de que Composer esté disponible en el agente Jenkins
                    // (Podrías necesitar un Dockerfile para el agente si necesitas herramientas específicas)

                    // Ejemplo de un linter de PHP (verifica sintaxis)
                    // (Necesitarías tener PHP instalado en el agente Jenkins o usar un contenedor Docker aquí)
                    // sh 'find . -name "*.php" -print0 | xargs -0 -n1 php -l'
                    echo 'Simulando instalación de dependencias y lint de PHP.'
                }
            }
        }

        stage('Run PHPUnit Tests') {
            steps {
                script {
                    // Si tienes pruebas PHPUnit:
                    // sh './vendor/bin/phpunit'
                    // Asegúrate de que PHPUnit esté configurado y accesible.
                    echo 'Simulando ejecución de pruebas PHPUnit.'
                }
            }
        }

        stage('Deploy to Docker Environment') {
            steps {
                script {
                    echo 'El código ya está en el volumen local de Docker Compose. Recargando servicios si es necesario.'
                    // Para que los cambios de tu aplicación PHP se reflejen después de un 'git pull'
                    // en tu carpeta local (que está montada por Docker Compose),
                    // a veces necesitas reiniciar PHP-FPM o Nginx para que carguen los nuevos archivos.
                    // Esto se haría desde el host, no desde Jenkins directamente a menos que configures Docker en Jenkins.
                    // Para un entorno de desarrollo simple, los archivos ya se actualizan en el volumen.
                    // Si quieres que Jenkins active esto, la forma más sencilla es usar docker compose desde el host.
                    // Ejemplo (solo si tu Jenkins tiene acceso a docker en el host, lo cual es complejo):
                    // sh 'docker compose -f /ruta/a/tu/docker-compose.yml restart mi-app-php integracion_continua_poli-web-1'
                    // Por ahora, solo como demostración de que el "deploy" sucede:
                    sh 'echo "Aplicación desplegada al entorno Docker." > deploy_log.txt'
                }
            }
        }
    }

    post {
        always {
            echo 'Pipeline finalizado. Verificando estado...'
        }
        success {
            echo '¡Pipeline ejecutado con ÉXITO!'
        }
        failure {
            echo 'El Pipeline FALLÓ. Revisar los logs.'
        }
    }
}