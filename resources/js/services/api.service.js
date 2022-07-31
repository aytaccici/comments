import axios from "axios";

let baseURL ='http://comment.test/api/v1/';

let instance =  axios.create({
    baseURL,
    timeout:5000,
    headers: {
        'Content-Type' : "application/json"
    }
});

instance.interceptors.response.use(
    function (response){
        return response;
    },
    function (error){
        const  {errorCode, message} = error.response.data;
        //we can use here another solution like ToastTr,Sweet Alert etc.
        console.log('Error Code:' + errorCode +' Message :' + message);
        return Promise.reject(error);
        }
    );

export default instance;
