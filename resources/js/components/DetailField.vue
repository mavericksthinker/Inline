<template>
    <panel-item :field="field">
        <template v-if="field.inlineDetail">
            <p slot="value" class="text-90">
                <label>
                    <input
                        type="text"
                        class="form-control form-input pl-1 whitespace-no-wrap w-auto"
                        :class="`text-${field.textAlign}`"
                        :placeholder="field.name"
                        v-model="value"
                        @blur="submit"
                        @keypress="update"
                        :disabled="isReadonly"
                    />
                </label>
            </p>
        </template>
        <template v-else>
            <p slot="value" class="text-90">
                <span
                   v-if="field.colorMap"
                   class="whitespace-no-wrap rounded-full text-xs font-bold"
                   :style="{ backgroundColor: backgroundColor(), color: textColor() }"
                   :class="`text-${field.textAlign}`"
                   v-html="field.value">
                </span>
                <span
                    v-else
                    class="whitespace-no-wrap"
                    :class="`text-${field.textAlign}`"
                    v-html="field.value">
                </span>
            </p>
        </template>
    </panel-item>
</template>

<script>
    import { FormField, HandlesValidationErrors } from 'laravel-nova'
    import InlineInit from './helpers/init';
    import InlineMixin from './helpers/inline';
    import InlineColors from './helpers/colors';

    export default {

        mixins:[FormField, HandlesValidationErrors,InlineInit,InlineMixin,InlineColors],

        props: ['resource', 'resourceName', 'resourceId', 'field'],

        data: () => ({
            loading: false,
            id:null
        }),
        created() {
            this.id = this.resourceId;
        }
    }
</script>
