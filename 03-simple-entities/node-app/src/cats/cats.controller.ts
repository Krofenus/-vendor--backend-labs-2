// cats.controller.ts
import {Controller, Get} from '@nestjs/common';
import {CatsService} from "./cats.service";
import {Cat} from "./cat.interface";

@Controller('cats')
export class CatsController {
   constructor(private catsService: CatsService) {
   }

   @Get()
   async findAll(): Promise<Cat[]> {
      return this.catsService.findAll();
   }
}