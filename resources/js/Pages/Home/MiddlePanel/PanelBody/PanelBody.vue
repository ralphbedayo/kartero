<template>
    <!--            body (messages)-->
    <div ref="panel_body" class="flex flex-grow flex-col-reverse gap-y-2 py-4 overflow-y-auto">
        <div v-for="(messageItem, key) in messageList">
            <div v-if="messageItem.user_group === userGroupOtherUser"
                 class="flex"
            >
                <div class="bg-gray-200 rounded-lg px-2 py-1 ml-2" v-html="messageItem.content"/>

            </div>

            <div v-if="messageItem.user_group === userGroupCurrentUser"
                 class=" flex flex-row-reverse"
            >
                <div class="bg-indigo-600 text-white rounded-lg px-2 py-1 mr-2" v-html="messageItem.content"/>
            </div>
        </div>
    </div>

    <div class="max-h-fit border-t justify-end py-3">
        <Footer @submit="submitMessage"/>
    </div>
</template>

<script>
import Footer from "./Footer/Footer.vue";
import {convertDelta} from '@/Utils/DeltaConverter';
import {USER_GROUP_CURRENT_USER, USER_GROUP_OTHER_USER} from "@/Constants/CommonConstants";
import {SEND_STATUS_SENDING} from "@/Constants/MessageConstants";

export default {
    name: "PanelBody",
    components: {
        // Components
        Footer
    },
    data() {
        return {
            userMessage: {},
            userGroupCurrentUser: USER_GROUP_CURRENT_USER,
            userGroupOtherUser: USER_GROUP_OTHER_USER,
            messageList: [
                {
                    message_id: '129381029message_id',
                    sender_id: '129381029message_id',
                    user_group: USER_GROUP_CURRENT_USER,
                    content: '<p>1 current user test message </p>',
                    seen: true,
                    send_status: SEND_STATUS_SENDING,
                    created_at: 123123123, //todo timestamp
                    updated_at: 123123123,
                },
                {
                    message_id: '129381029message_id',
                    sender_id: '129381029message_id',
                    user_group: USER_GROUP_CURRENT_USER,
                    content: '<p>2 current user test message </p>',
                    seen: true,
                    send_status: SEND_STATUS_SENDING,
                    created_at: 123123123, //todo timestamp
                    updated_at: 123123123,
                },
                {
                    message_id: '129381029message_id',
                    sender_id: '129381029message_id',
                    user_group: USER_GROUP_OTHER_USER,
                    content: '<p>3 other user test message </p>',
                    seen: true,
                    send_status: SEND_STATUS_SENDING,
                    created_at: 123123123, //todo timestamp
                    updated_at: 123123123,
                },
                {
                    message_id: '129381029message_id',
                    sender_id: '129381029message_id',
                    user_group: USER_GROUP_CURRENT_USER,
                    content: '<p>4 current user test message </p>',
                    seen: true,
                    send_status: SEND_STATUS_SENDING,
                    created_at: 123123123, //todo timestamp
                    updated_at: 123123123,
                },
                {
                    message_id: '129381029message_id',
                    sender_id: '129381029message_id',
                    user_group: USER_GROUP_OTHER_USER,
                    content: '<p>5 other user test message </p>',
                    seen: true,
                    send_status: SEND_STATUS_SENDING,
                    created_at: 123123123, //todo timestamp
                    updated_at: 123123123,
                },
                {
                    message_id: '129381029message_id',
                    sender_id: '129381029message_id',
                    user_group: USER_GROUP_CURRENT_USER,
                    content: '<p>6 current user test message </p>',
                    seen: true,
                    send_status: SEND_STATUS_SENDING,
                    created_at: 123123123, //todo timestamp
                    updated_at: 123123123,
                },
            ]
        }
    },
    methods: {
        submitMessage(delta) {
            // Convert delta before sending
            let deltaHtml = convertDelta(delta);

            console.log(deltaHtml);

            //@todo Append message to body
            this.prependMessage(deltaHtml);

            //todo set message status to message

            //@todo Send to API and wait for response

            //@todo set message status to sent after receiving response
        },
        prependMessage(deltaHtml, owner = USER_GROUP_CURRENT_USER) {
            if (owner === USER_GROUP_CURRENT_USER) {
                // @todo append html to right


            } else if (owner === USER_GROUP_OTHER_USER) {
                // @todo append html to left
            }

            this.messageList.unshift({
                user_group: USER_GROUP_CURRENT_USER,
                content: deltaHtml,
                seen: true,
                send_status: SEND_STATUS_SENDING
            });
        }

    }
}
</script>

<style scoped>

</style>
