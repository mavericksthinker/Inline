Nova.booting((Vue, router, store) => {
    Vue.component('index-inline', require('./components/IndexField'));
    Vue.component('detail-inline', require('./components/DetailField'));
    Vue.component('form-inline', require('./components/FormField'));
});
