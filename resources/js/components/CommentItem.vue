<template>
    <div
        class="flex-col w-full py-4 mx-auto mt-3 bg-white border-b-2 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-3/3">
        <div class="flex flex-row md-10">
            <img alt="Anonymous's avatar"
                 src="https://www.fillmurray.com/250/250"
                 class="w-12 h-12 border-2 border-gray-300 rounded-full">
            <div class="flex-col mt-1">
                <div class="flex items-center flex-1 px-4 font-bold leading-tight">{{ comment.created_by }}
                    <span class="ml-2 text-xs font-normal text-gray-500">{{ comment.created_at }}</span></div>
                <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">{{ comment.content }}
                </div>
                <button v-if="comment.level < 3" class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                    <svg viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg"
                         class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900">
                        <path
                            d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                            fill-rule="nonzero"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div :style="indent" v-if="comment.comments.length>0">
            <CommentItem
                v-for="child in comment.comments"
                :key="child.id"
                :comment="child"
                :depth="depth + 1"
            />
        </div>
    </div>
</template>
<script>
export default {
    name: "commentItem",
    props: ["comment", 'depth'],
    computed: {
        indent() {
            return { marginLeft: `${this.depth * 50}px)` }
        }
    },
}
</script>
