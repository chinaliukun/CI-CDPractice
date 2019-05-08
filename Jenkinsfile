node {
    stage('Build'){    
        echo 'Building'
        git 'https://github.com/chinaliukun/CI-CDPractice.git'
        def integ_out =sh(script:"docker build -t cicd/mysql:1 MYSQL/ && docker build -t cicd/phphttpd:1 PHP7.2/",returnStatus :true)
        if(integ_out == 0){
            emailext body: 'Build success!', subject: 'Build success!', to: '392716762@qq.com'
        }
        else{
            emailext body: 'Build success!', subject: 'Build failed!', to: '392716762@qq.com'
        }
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
        else{
            emailext body: 'Develop success!', subject: 'Develop failed!', to: '392716762@qq.com'
        }
    }
}