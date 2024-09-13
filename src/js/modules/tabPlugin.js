// tabPlugin.js
export class TabPlugin {
    constructor(containerSelector) {
      this.container = document.querySelector(containerSelector);
      if (!this.container) {
        console.error(`Container with selector ${containerSelector} not found.`);
        return;
      }
      
      this.buttons = this.container.querySelectorAll('[data-tab-control]');
      this.blocks = this.container.querySelectorAll('[data-tab-target]');
      
      if (this.buttons.length === 0 || this.blocks.length === 0) {
        console.error('No buttons or blocks found with the required data attributes.');
        return;
      }
  
      this.init();
    }
  
    init() {
      this.blocks.forEach(block => block.style.display = 'none');
      this.showBlock(this.blocks[0].dataset.tabTarget);
  
      this.buttons.forEach(button => {
        button.addEventListener('click', () => {
          const targetName = button.dataset.tabControl;
          this.showBlock(targetName);
        });
      });
    }
  
    showBlock(targetName) {
      this.blocks.forEach(block => block.style.display = 'none');
  
      const targetBlock = this.container.querySelector(`[data-tab-target="${targetName}"]`);
      if (targetBlock) {
        targetBlock.style.display = 'block';
      } else {
        console.error(`Block with target name ${targetName} not found.`);
      }
    }
  }
  