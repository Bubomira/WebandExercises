import * as d3 from 'd3'

const createHalfCircle=(outline,left,rigth)=>{

   let arc = d3.arc()
      .innerRadius(0)      
      .outerRadius(100)   
      .startAngle(-Math.PI/2)        
      .endAngle(Math.PI/2);   

  let svgEl = d3.create('svg')
    .attr('width', 300)
    .attr('height', 100);


  let defs = svgEl.append('defs')
  
  let gradient = defs.append('linearGradient')
    .attr('id', `arc-gradient-${left}`)
    .attr('x1', '0%')
    .attr('y1', '0%')
    .attr('x2', '100%')
    .attr('y2', '0%')

  gradient.append('stop')
    .attr('offset', '0%')
    .attr('stop-color',left)

  gradient.append('stop')
    .attr('offset', '100%')
    .attr('stop-color', rigth)

  svgEl.append('g')
    .attr('transform', `translate(150, 100)`)
    .append('path')
    .attr('d', arc)
    .attr('fill', `url(#arc-gradient-${left})`)
    .attr('stroke', outline)
    .attr('stroke-width', 1)

  return svgEl.node();
}

export const createHalfGreenCircle = createHalfCircle.bind(null,'#248E70','#8AFFCE','#248E70');

export const createHalfRedCircle =createHalfCircle.bind(null,'#B80D0D','#FFCFCF','#FFA1A1');

