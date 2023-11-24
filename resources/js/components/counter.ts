import type { Ref } from 'vue'

export const incNum = function (num: Ref): void {
  num.value++
}
