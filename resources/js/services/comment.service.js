import ApiService from './api.service'
let resource = 'comments/'
export default {
    saveComment(newComment){
        return ApiService.post(resource,newComment);
    }
}
