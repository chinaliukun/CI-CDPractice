node {
    stage('Build'){    
        echo 'Building'
        git 'https://github.com/chinaliukun/CI-CDPractice.git'
        def integ_out = sh(script:"docker build -t mesgboard/mysql:1 MYSQL/ && docker build -t mesgboard/mesgboard:1 PHP7.2/",returnStatus :true)
        if(integ_out == 0){
            emailext body: '''<h1>Build success!</h1><p>Project name: ${JOB_NAME}</p><p>Build number: ${BUILD_NUMBER}</p>''', subject: 'Build success!', to: '392716762@qq.com'
        }
        else{
            emailext body: '''<h1>Build failed!</h1><p>Project name: ${JOB_NAME}</p><p>Build number: ${BUILD_NUMBER}</p>''', subject: 'Build failed!', to: '392716762@qq.com'
        }
    }
    stage('Test'){
        def test_out = sh(script:"phpunit test.php",returnStatus: true)
        echo 'Testing'
        if(test_out==0){
            emailext body: '''<h1>Test success!</h1><p>Project name: ${JOB_NAME}</p><p>Test number: ${BUILD_NUMBER}</p>''', subject: 'Test success!', to: '392716762@qq.com'
        }else{
            emailext body: '''<h1>Test failed!</h1><p>Project name: ${JOB_NAME}</p><p>Test number: ${BUILD_NUMBER}</p>''', subject: 'Test failed!', to: '392716762@qq.com'
        }
    }
    stage('Deploy'){
        def dep_out = sh(script:"kubectl apply -f Deployment/",returnStatus: true)
        echo 'Deploying'
        if(dep_out == 0){
            emailext body: '''<h1>Deploy sucess!</h1><p>Project name: ${JOB_NAME}</p><p>Build number: ${BUILD_NUMBER}</p>''', subject: 'Deploy sucess!', to: '392716762@qq.com'
        }
        else{
            emailext body: '''<h1>Deploy failed!</h1><p>Project name: ${JOB_NAME}</p><p>Build number: ${BUILD_NUMBER}</p>''', subject: 'Deploy failed!', to: '392716762@qq.com'
        }
    }
}