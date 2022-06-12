<template>
    <div class="max-h-full main-wrap w-full">
        <div id="scrolling-container" class="w-full">
            <div ref="quill_container" id="quill-container" class="w-full">
            </div>
        </div>
    </div>
</template>

<script>
import Quill from 'quill';
import 'quill/dist/quill.bubble.css';
import {KEYBOARD_ENTER_KEY_CODE} from '@/Constants/KeyboardConstants';

export default {
    name: "MessageEditor",
    props: {
        messageModel: String
    },
    emits: ['update:messageModel', 'send'],
    data() {
        return {
            quillEditor: null,
        }
    },
    methods: {
        initializeQuill() {
            this.quillEditor = new Quill(this.$refs.quill_container, {
                modules: {
                    toolbar: [
                        [
                            'bold',
                            'italic',
                            'underline',
                            'strike',
                            {'script': 'sub'},
                            {'script': 'super'},
                            'code'
                        ],
                    ],
                    // Add keyboard listener
                    keyboard: {
                        bindings: {
                            enter: {
                                key: KEYBOARD_ENTER_KEY_CODE,
                                handler: this.sendContent
                            }
                        }
                    }
                },

                // Set available formats
                formats: [
                    'bold',
                    'italic',
                    'underline',
                    'strike',
                    'script',
                    'code'
                ],

                scrollingContainer: '#scrolling-container',
                placeholder: 'Message',
                bounds: 'main',
                theme: 'bubble'
            });

            // Add Text Change listener
            this.quillEditor.on('text-change', this.editorInput);
        },
        editorInput(delta, oldDelta, source) {
            // Delta reference: https://quilljs.com/docs/delta/

            this.$emit('update:messageModel', delta);
            // console.log(['caught delta : ', delta]);
            // console.log(['caught oldDelta: ', oldDelta]);
            // console.log('caught source: ' + source);
        },
        sendContent() {
            this.$emit('send', this.quillEditor.getContents());
            console.log(this.quillEditor.getContents());
        }
    },
    mounted() {
        this.initializeQuill();
    }
}
</script>

<style scoped>

/* Tell Quill not to scroll */
#quill-container {
    height: auto;
    max-height: 100%;
    word-wrap: break-word;
    word-break: break-word;
}

/* Specify our own scrolling container */
#scrolling-container {
    max-height: 50vh;
}

</style>

<!-- Non-scoped style for quill editor-->
<style>
#quill-container .ql-editor {
    font-size: 18px;
}

.ql-editor {
    padding: 0 !important;
}

.ql-bubble .ql-tooltip {
    z-index: 1;
}

.ql-editor.ql-blank::before {
    left: 0 !important;
}
</style>
