node {
    stage('Build'){    
        echo 'Building'
        git 'https://github.com/chinaliukun/CI-CDPractice.git'
        def integ_out = sh(script:"microk8s.docker build -t mesgboard/mysql:1 MYSQL/ && microk8s.docker build -t mesgboard/mesgboard:1 PHP7.2/",returnStatus :true)
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
            emailext body: '<h1>Develop sucess!</h1><p>Project name: ${env.PROJECT_NAME}</p><p>Build number: ${env.BUILD_NUMBER}</p>', subject: 'Develop sucess!', to: '392716762@qq.com'
        }
        else{
            emailext body: '<h1>Develop failed!</h1><p>Project name: ${env.PROJECT_NAME}</p><p>Build number: ${env.BUILD_NUMBER}</p>', subject: 'Develop failed!', to: '392716762@qq.com'
        }
    }
}