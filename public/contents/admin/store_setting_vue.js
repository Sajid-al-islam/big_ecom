const { default: store } = window.store;
if (document.getElementById('store_setup_settings_website')) {
    // console.log('ok');
    const app = new Vue({
        el: '#store_setup_settings_website',
        store: store,
        data: function () {
            return {
                form_data: {
                    id: null,
                    weight_measurement: null,
                    length_measurement: null,
                    decimal_token: null,
                    thousands_token: null,
                    decimal_places: null,
                    factoring_dimension: null,
                    home_page_title: null,
                    meta_keywords: null,
                    meta_description: null,
                    redirect: null,
                    slug: null,
                },
            }
        },
   
        methods: {
            ...window.mutation(['test_mutation']),
            ...window.action(['fetch_category_info']),
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                
                    axios.post('/create-store-setup-settings-website', form_datas)
                        .then((res) => {
                            console.log(res.data);
                        })
                        .catch((err) => {
                            console.log(err.response);
                            let errors = err.response.data.errors;
                        })
               

            },
        },
        computed: {
            ...window.getters(['get_check_auth']),
        }
    });
}