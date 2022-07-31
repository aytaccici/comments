import ApiService from './api.service'
let resource = 'posts/'
export default {
    GetPostByPage(page){
        return ApiService.get(resource, {params: {page}});
    },
    GetSingleWithComments(postId){
        return ApiService.get(resource+ postId);
    }
}
