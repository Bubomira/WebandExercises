import { Tooltip } from 'bootstrap'

export default {
  mounted(el) {
    new Tooltip(el)
  },
  unmounted(el) {
    const tooltip = Tooltip.getInstance(el)
    if (tooltip) tooltip.dispose()
  }
}