import {QuillDeltaToHtmlConverter} from "quill-delta-to-html";

export function convertDelta(delta, converterConfig = {}) {
    let converter = new QuillDeltaToHtmlConverter(delta.ops, converterConfig);

    return converter.convert();
}
