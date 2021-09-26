<template>
  <div class="form-loader-overlay d-flex flex-column">
    <b-spinner
      variant="primary"
      label="Spinning"
      class="z-index-999"
    ></b-spinner>
    <span class="srt">{{ trans("website.loading") || "Loading" }}...</span>
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
  // background-color: rgba(255, 255, 255, 0.8);
  background: radial-gradient(
    circle,
    rgba(25, 38, 55, 0.7) 35%,
    rgba(255, 255, 255, 0) 100%
  );
}
</style>
