<template>
    <!--            footer (writer/chat box and other actions)-->
    <div class="flex flex-row">
        <div class="p-1 mr-2">
            <PaperClipIcon class="h-7 w-7" />
        </div>
        <div class="p-1 mr-2">
            <PhotographIcon class="h-7 w-7" />
        </div>
        <div class="flex flex-grow flex-row p-1 mr-3 bg-gray-200 border-0 rounded-lg max-w-full w-full">

            <div class="max-w-full w-full inline-block">
                <MessageEditor @message-send="logMessage"/>
            </div>
            <div>
                <EmojiHappyIcon class="h-7 w-7" />
            </div>

        </div>
        <div class="p-1 mr-2">
            <PaperAirplaneIcon class="h-7 w-7" />
        </div>
    </div>
</template>

<script>
import {
    PaperClipIcon,
    PhotographIcon,
    PaperAirplaneIcon,
    EmojiHappyIcon
} from '@heroicons/vue/outline'

import MessageEditor from "./MessageEditor";


export default  {
    name: "Footer",
    props: {
        message: String
    },
    components: {
        // Hero Icons
        PaperClipIcon,
        PhotographIcon,
        PaperAirplaneIcon,
        EmojiHappyIcon,

        // Components
        MessageEditor
    },
    methods: {
        logMessage(e) {
            console.log(e);
        }
    }
}
</script>

<style scoped>

</style>
