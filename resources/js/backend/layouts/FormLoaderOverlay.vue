<template>
  <div class="form-loader-overlay d-flex flex-column">
    <img src="/images/tag-loader.svg" alt="loading..." width="60px" />
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.form-loader-overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  align-items: center;
  justify-content: center;
  z-index: 99;
  background-color: rgba(255, 255, 255, 0.8);
}
</style>