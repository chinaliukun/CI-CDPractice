node {
    stage('Build'){    
        git 'https://github.com/chinaliukun/CI-CDPractice.git'
        echo 'Building'
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