export default {
    methods: {
        async submit(event) {

            if((this.id != this.resourceId || this.field.value != this.value) && this.value!=null) {
                let formData = new FormData();

                formData.append(this.field.attribute, this.value);
                formData.append('_method', 'PUT');

                return Nova.request().post(`/nova-api/${this.resourceName}/${this.resourceId}`, formData)
                    .then(() => {
                        this.field.value = this.value;
                        this.id = this.resourceId;
                        this.$toasted.show(this.field.successMessage, {type: 'success'});
                    }, (response) => {
                        this.value = this.field.value;
                        this.$toasted.show(this.field.errorMessage?this.field.errorMessage:response, {type: 'error'});
                    })
            }
        },
        update(event){
            if(event.keyCode === 13)
                this.submit();
        }
    }
}
