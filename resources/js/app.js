import './bootstrap'
import '../css/app.css'
import '@protonemedia/laravel-splade/dist/style.css'

import { createApp } from 'vue'
import { SpladePlugin, renderSpladeApp } from '@protonemedia/laravel-splade'

import Combo from './Components/Combo.vue'

const el = document.getElementById('app')

createApp({
  render: renderSpladeApp({ el }),
})
  .use(SpladePlugin, {
    max_keep_alive: 10,
    transform_anchors: false,
    progress_bar: true,
    components: {
      Combo,
    },
  })
  .mount(el)
