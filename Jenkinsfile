node {
    stage('Build'){    
        echo 'Building'
        sh 'whoami'
        git 'https://github.com/chinaliukun/CI-CDPractice.git'
        sh 'docker build -t cicd/mysql:1 MYSQL/'
        sh 'docker build -t cicd/phphttpd:1 PHP7.2/'
    }
    stage('Test'){
        sh 'cat Readme.md'
        echo 'Testing'
    }
    stage('Deploy'){
        def dep_out = sh(script:"microk8s.kubectl get nodes",returnStatus: true)
        echo 'Deploying'
        if(dep_out == 0){
            emailext body: 'Develop success!', subject: 'Develop success!', to: '392716762@qq.com'
        }
        else(
            emailext body: 'Develop success!', subject: 'Develop failed!', to: '392716762@qq.com'
        )
    }
}