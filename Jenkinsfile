node {
    stage('Build'){    
        echo 'Building'
        git 'https://github.com/chinaliukun/CI-CDPractice.git'
        sh 'docker build -t cicd/mysql:1 MYSQL/'
        sh 'docker build -t cicd/phphttpd:1 PHP7.2/'
    }
    stage('Test'){
        sh 'cat Readme.md'
        echo 'Testing'
    }
    stage('Deploy'){
        sh 'microk8s.kubectl get nodes'
        echo 'Deploying'
    }
}